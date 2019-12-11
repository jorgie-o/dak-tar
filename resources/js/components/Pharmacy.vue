<template>
<div class="template-container">
    <div class="row">
    <div class="col-6">
        <div class="card-box">
            <h3 class="m-t-0 m-b-30">Create Diagnosis</h3>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="first_name">Patient id*</label>
                    <input type="text" placeholder="Enter patient id" class="form-control" v-model="patientId" required/>                      
                </div>
                <div class="form-group">
                    <label for="first_name">Enter the drugs dispenses here</label>
                    <textarea type="text" rows="4" placeholder="Enter dispenses here" class="form-control" v-model="dispenses" required/>                      
                </div>
                 <div class="form-group text-left m-b-0">
                    <button  type="submit" class="btn btn-primary waves-effect waves-light" @click.prevent="createDiagnosis">
                        Save drug dispense
                    </button>
                </div>
                <span class="text-success">{{ isSaving }}</span>    
            </form>
        </div>
    </div>
    <div class="col-6">
        <div class="card-box">
            <h3 class="m-t-0 m-b-30">Patient detail</h3>
            <h4 class="text-success">{{ loadingSearch}}</h4>
                <div class="text-center card-box">
                    <div>
                        <!-- <img src="assets/images/users/avatar-10.jpg" class="rounded-circle thumb-xl img-thumbnail m-b-10" alt="profile-image"> -->

                        <p class="text-muted font-20 m-b-30 text-success">
                            This is the details for the patient whose ID is entered in the id field
                        </p>

                        <div class="text-left">
                            <p class="text-muted font-16"><strong>Frist name :</strong> <span class="m-l-15">{{searchResult.first_name}}</span></p>
                            <p class="text-muted font-16"><strong>Last name :</strong><span class="m-l-15">{{searchResult.last_name}}</span></p>
                            <p class="text-muted font-16"><strong>Gender :</strong> <span class="m-l-15">{{searchResult.gender}}</span></p>
                            <p class="text-muted font-16"><strong>Age :</strong> <span class="m-l-15">{{searchResult.age}}</span></p>
                            <p class="text-muted font-16"><strong>Contact :</strong> <span class="m-l-15">{{searchResult.contact}}</span></p>
                            <p class="text-muted font-16"><strong>Address :</strong> <span class="m-l-15">{{searchResult.address}}</span></p>
                            <p class="text-muted font-16"><strong>Created at :</strong> <span class="m-l-15">{{searchResult.created_at}}</span></p>
                        </div>
                        <div>
                            <h4 class="font-20 m-b-30 text-success">
                                Patient Opd Request
                            </h4>
                            <div class="text-left">
                                <p class="text-muted font-13"><strong>Request test :</strong> <span class="m-l-15">{{ opdResult.lab_results }}</span></p>
                            </div>
                             <h4 class="font-20 m-b-30 text-success">
                                Patient Lab Results
                            </h4>
                            <div class="text-left">
                                <p class="text-muted font-13"><strong>Lab Results :</strong> <span class="m-l-15">{{ labResults.test_result }}</span></p>
                            </div>
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
                selected: '',
                healness: '',
                isSaving: '',
                prescription: '',
                labResults: '',
                opdResult: '',
                dispenses: ''
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

            getPatientLabTest: _.debounce(function(){
                let vm = this
                axios.get('/api/getLab/' + this.patientId )
                .then(response => {
                    this.labResults = response.data
                    if (this.searchResult.length == 0) {
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

            createDiagnosis(){
                this.isSaving = "Creating diagnosis"
                axios.post('/api/pharmacies', {
                   patient_id:this.patientId,
                   dispenses:this.dispenses,
                   opd_id: this.opdResult.id,
                })
                .then(response => {
                    console.log(response.data);
                    this.isSaving = "Diagnosis saved"
                    window.location.href = "/pharmacies";
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
                    this.getPatientLabTest()
                }
            }
         },
    }
</script>
