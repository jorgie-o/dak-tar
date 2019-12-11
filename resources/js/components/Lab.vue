<template>
<div class="template-container">
    <div class="row">
    <div class="col-6">
        <div class="card-box">
            <h3 class="m-t-0 m-b-30">Create Lab test</h3>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="first_name">Patient id*</label>
                    <input type="text" placeholder="Enter patient id" class="form-control" v-model="patientId" required/>                      
                </div>
                <div class="form-group">
                    <label for="first_name">Test results</label>
                    <textarea type="text" rows="4" placeholder="Describe the labaratory test here" class="form-control" v-model="labResults" required/>                      
                </div>
                 <div class="form-group text-left m-b-0">
                    <button  type="submit" class="btn btn-primary waves-effect waves-light" @click.prevent="createLabTest">
                        Save labaratory test
                    </button>
                </div>
                <span class="text-success">{{ isSaving }}</span>
            </form>
        </div>
    </div>
    <div class="col-6">
        <div class="card-box">
            <h2 class="m-t-0 m-b-30 text-success">Patient detail</h2>
            <h4 class="text-success">{{ loadingSearch}}</h4>
                <div class="text-center card-box">
                    <div>
                        <!-- <img src="assets/images/users/avatar-10.jpg" class="rounded-circle thumb-xl img-thumbnail m-b-10" alt="profile-image"> -->

                        <h4 class=" font-20 m-b-30">
                            This is the details for the patient whose ID is entered in the id field
                        </h4>

                        <div class="text-left">
                            <p class="text-muted font-13"><strong>Frist name :</strong> <span class="m-l-15">{{searchResult.first_name}}</span></p>
                            <p class="text-muted font-13"><strong>Last name :</strong><span class="m-l-15">{{searchResult.last_name}}</span></p>
                            <p class="text-muted font-13"><strong>Gender :</strong> <span class="m-l-15">{{searchResult.gender}}</span></p>
                            <p class="text-muted font-13"><strong>Age :</strong> <span class="m-l-15">{{searchResult.age}}</span></p>
                            <p class="text-muted font-13"><strong>Contact :</strong> <span class="m-l-15">{{searchResult.contact}}</span></p>
                            <p class="text-muted font-13"><strong>Address :</strong> <span class="m-l-15">{{searchResult.address}}</span></p>
                            <p class="text-muted font-13"><strong>Created at :</strong> <span class="m-l-15">{{searchResult.created_at}}</span></p>
                        </div>
                        <h4 class="font-20 m-b-30">
                            Patient Opd Request
                        </h4>
                        <div class="text-left">
                            <p class="text-muted font-13"><strong>Request test :</strong> <span class="m-l-15">{{ opdResult.lab_results }}</span></p>
                        </div>
                    </div>
            </div> 
        </div>
    </div>
    </div>
</div>
</template>

<script>
    export default {
        data() {
            return{
                patientId: '',
                searchResult: '',
                loadingSearch: '',
                isSaving: '',
                labResults: '', 
                opdResult: ''
            }
        },
        methods:{
            searchPatient: _.debounce(function(){
                let vm = this
                this.loadingSearch = "Searching please wait ...."
                axios.get('/api/getPatient/' + this.patientId )
                .then(response => {
                    this.loadingSearch = ''
                    this.searchResult = response.data
                    console.log('searchResult: ', this.searchResult);
                    if (this.searchResult.length == 0) {
                    this.loadingSearch = "No individual found"
                    }
                })
                .catch(error => {
                    console.log(error)
                })

            }, 500),
            getPatientOpd: _.debounce(function(){
                let vm = this
                axios.get('/api/getPatientOpd/' + this.patientId )
                .then(response => {
                    this.loadingSearch = ''
                    this.opdResult = response.data
                    if (this.searchResult.length == 0) {
                    }
                })
                .catch(error => {
                    console.log(error)
                })

            }, 500),

            createLabTest(){
                this.isSaving = "Creating lab test ...."
                axios.post('/api/labs', {
                   patient_id:this.patientId,
                   lab_request: this.labResults,
                   opd_id: this.opdResult.id
                })
                .then(response => {
                    console.log(response.data);
                    this.isSaving = "Lab test saved"
                    window.location.href = "/labs";
                })
                .catch(error=> {
                    console.log(error)
                })
            }
        },
         watch: {
            patientId(){
                this.searchResult = ''
                if (this.patientId.length >= 1) {
                    this.searchPatient()
                    this.getPatientOpd()
                }
            }
         },
    }
</script>
