<template>
    <div class="container-fluid">
    <p id="progress-text" class="progress-text">{{this.progresscount}}%</p>
    <div class="progress mt-5">
    <div id="progressbar" class="progress-bar"></div>
  </div>
    <div   v-on:click="closetest" class="pull-right"><i class="fa fa-times btnclose"></i></div>
    <div class="row bg-light mt-5">
     <div class="col-12">
              <same-alert class="mt-4" :questiondata="questiondata"/>

     <div class="samebox" v-if="this.showSame==1">
      <h2>Sorry to interrupt!</h2>
      <div class="text mb-5">
            Unfortunately there is not enough variety in your answers, therefore we won't able to calculate a reliable result for you. Please start the test again and make sure to answer honestly
      </div>
      <div class="row">
      <div class="col-md-4 col-7">
      <a href="https://igtechservices.com/personalitypath/personalitytest" class="btnblue">RESTART TEST</a>
      </div>
      <div class="col-md-4 col-4">
      <a href="http://personalitypath.com" class="btnlight">LEAVE</a>
      </div>
      </div>
     </div>

        <div class="samebox" v-if="this.showClose==1">
      <h2>Do you really want to leave?</h2>
      <div class="text mb-5">
        If you leave now you will lose your progress and will have to start new test
      </div>
      <div class="row">
      <div class="col-md-4 col-7">
      <a  v-on:click="resumetest" href="javascript::void(0)" class="btnblue">RESUME TEST</a>
      </div>
      <div class="col-md-4 col-4">
      <a href="http://personalitypath.com" class="btnlight">LEAVE</a>
      </div>
      </div>
     </div>

     </div>
    </div>


        <div class="row justify-content-center" v-if="this.showSection==1">
         <div class="col-md-4 col-12 leftbar"></div>
           <div class="col-md-8 bg-light col-12">
                <div class="card personality-box">
                    <div class="card-header test-title d-none">
                    Personality Test Stage {{this.stage}}
                    <span v-if="this.stage==2">Round {{this.round}}</span>
                    </div>
                      
                    <div class="card-body">
                      <div class="stage4"  v-if="this.status==0">
                        <h1 class="text-center resulth1">CONGRATULATIONS!!!</h1>
                          <h2 class="text-center resulth2">You have completed the test successfully!</h2>
                      </div>
                      <div class="stage3"  v-if="this.stage==3 && this.status==1">
                        <div class="row">
                        <div class="col-md-12">
                        <div class="optheading text-center">
                          <p>You're almost done!</p>
                          <p>Please choose the statement most applicable to you.</p>
                        </div>
                        </div>
                    </div>

                      <div class="row">
                      <div class="col-1 offset-md-1">
                       <div class="form-group m-form__group s3radio">
                        <svg class="animation-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 300 300" preserveAspectRatio="none"">
                            <circle class="circle" cx="100" cy="100" r="57" id="green-halo" fill="none" stroke="#c6bfb5" stroke-width="5" stroke-dasharray="0,20000" transform="rotate(-90,100,100)" />
                          </svg>
                        <div v-on:click="QuestionResponse" :id="this.fields.statement_a_pid"  class="faux-radio lrg" data-val="3"></div>
                              </div>
                        </div>
                      <div class="col-7">
                  <h3 class="question pull-left">{{questiondata.statement_a_text}}</h3>
                      </div>
                  </div>
                   <div class="row">
                      <div class="col-1 offset-md-1">
                       <div class="form-group m-form__group s3radio">
                        <svg class="animation-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 300 300" preserveAspectRatio="none"">
                            <circle class="circle" cx="100" cy="100" r="57" id="green-halo" fill="none" stroke="#c6bfb5" stroke-width="5" stroke-dasharray="0,20000" transform="rotate(-90,100,100)" />
                          </svg>
                         <div v-on:click="QuestionResponse" :id="this.fields.statement_b_pid"  class="faux-radio lrg" data-val="3"></div>
                              </div>
                        </div>
                      <div class="col-7">
                        <h3 class="question pull-left">{{questiondata.statement_b_text}}</h3>
                      </div>
                  </div>

                    </div>

                     
                        <div class="stage12" v-if="(this.stage==1 || this.stage==2)  && this.status==1">
                        <h3 class="question">{{questiondata.question}}</h3>
                            <div class="row answer-row">

                               

                              <input type="hidden" name="rank"  value="1"> 
                            <div class="col-md-2 col-3">
                          <div class="form-group m-form__group">
                           <svg class="animation-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 300 300" preserveAspectRatio="none"">
                            <circle class="circle" cx="100" cy="100" r="57" id="green-halo" fill="none" stroke="#c6bfb5" stroke-width="5" stroke-dasharray="0,20000" transform="rotate(-90,100,100)" />
                          </svg>
                           <div  v-on:click="QuestionResponse" data-val="0" class="faux-radio lrg"></div>
                                </div>
                               <p class="optheading"> NOT <br>TRUE</p>
                            </div>
                              <div class="col-md-2 col-3">
                               <div class="form-group m-form__group">
                            <svg class="animation-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 300 300" preserveAspectRatio="none"">
                            <circle class="circle" cx="100" cy="100" r="57" id="green-halo" fill="none" stroke="#c6bfb5" stroke-width="5" stroke-dasharray="0,20000" transform="rotate(-90,100,100)" />
                          </svg>

                                  
                    <div  v-on:click="QuestionResponse" class="faux-radio lrg" data-val="1"></div>
                                  
                                </div>
                      <p class="optheading"> RARELY <br>TRUE</p>

                            </div> 
                              <div class="col-md-2 col-3">
                               <div class="form-group m-form__group">
                                <svg class="animation-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 300 300" preserveAspectRatio="none"">
                            <circle class="circle" cx="100" cy="100" r="57" id="green-halo" fill="none" stroke="#c6bfb5" stroke-width="5" stroke-dasharray="0,20000" transform="rotate(-90,100,100)" />
                          </svg>
                    <div  v-on:click="QuestionResponse" class="faux-radio lrg" data-val="2"></div>

                                </div>
                      <p class="optheading"> OFTEN<br> TRUE</p>

                            </div> 
                           
                                <div class="col-md-2 col-3">
                          <div class="form-group m-form__group">
                           <svg class="animation-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 300 300" preserveAspectRatio="none"">
                            <circle class="circle" cx="100" cy="100" r="57" id="green-halo" fill="none" stroke="#c6bfb5" stroke-width="5" stroke-dasharray="0,20000" transform="rotate(-90,100,100)" />
                          </svg>
                    <div v-on:click="QuestionResponse" class="faux-radio lrg" data-val="3"></div>
                                </div>
                      <p class="optheading"> VERY <br>TRUE</p>

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
   import FirstQuestion from "../../api/firststage";
   import SameAlert from './partials/SameAlert.vue'

   import Response from "../../api/questionresponse";
   import VueSimpleAlert from "vue-simple-alert";
   Vue.use(VueSimpleAlert);              
    
    export default {
        name: "ApplicationTile",
        mounted() {
            FirstQuestion.getfirstquestion()
            .then(response => {
               this.questiondata = response.data.response;
               this.fields.rank = this.questiondata.rank;
               this.fields.question_id = this.questiondata.id;
               this.fields.personality_id = this.questiondata.personality_id;
               this.fields.statement_a_pid = this.questiondata.statement_a_pid;
               this.fields.statement_b_pid = this.questiondata.statement_b_pid;
               this.fields.is_reverse = this.questiondata.is_reverse;
               this.fields.type = this.questiondata.type;
               this.attempted.push(this.questiondata.id);
               this.fields.attempted=this.attempted;
            })
            .catch(error => {
                console.log('error', error)
            });
        },
         components: {
           SameAlert
          },

        data() {
            return {

           
            message:'',
                status: 1,
                progresscount: 0,
                qcounter: 0,
                counter: 0,
                showSame: 0,
                showClose: 0,
                showSection: 1,
                stage: 1,
                round: 1,
                responseObj: {},
                userresponses: [],
                allAnswers: [],
                attempted: [],
                questiondata: [],
                 fields: {
                    discard: [],
                    userResults: [],
                    typeBcount: 0,
                    p1: 0,
                    p2: 0,
                    round: 0,
                    counter: 0,
                    rank: '',
                    question_id: '',
                    is_reverse: '',
                    personality_id: '',
                    statement_a_pid: '',
                    statement_b_pid: '',
                    answer: '',
                    attempted: '',
                    dpArray: '',
                    allAnswers: '',
                    userresponses: '',
                    stage: 1,
                    type: ''
                }
            }
        },
         methods: {

        QuestionResponse: function (event) {
                if(this.fields.type=="B"){
                    this.fields.personality_id=event.currentTarget.getAttribute('id');
                }
                var ans=event.currentTarget.getAttribute('data-val');
                Vue.set(this.responseObj, 'question_id', this.fields.question_id);
                  Vue.set(this.responseObj, 'type', this.fields.type);
                  Vue.set(this.responseObj, 'rank', this.fields.rank);
                  Vue.set(this.responseObj, 'is_reverse', this.fields.is_reverse);
                  Vue.set(this.responseObj, 'personality_id', this.fields.personality_id);
                  Vue.set(this.responseObj, 'statement_a_pid', this.fields.statement_a_pid);
                  Vue.set(this.responseObj, 'statement_b_pid', this.fields.statement_b_pid);
                  Vue.set(this.responseObj, 'answer', ans);
                  Vue.set(this.userresponses, this.counter, this.responseObj);
                  this.allAnswers.push(ans);
                  
                  this.fields.userresponses=this.userresponses;
                  this.fields.answer=ans;
                  this.fields.stage=this.stage;
                  this.fields.allAnswers=this.allAnswers;
                  this.responseObj={};


                  parent = event.currentTarget.parentNode.querySelector('.animation-svg');
                  var child=parent.children;
                  var circle=child[0];
                  var backclass = document.getElementsByClassName('faux-radio')[0];
                  var backclass = event.currentTarget;
                  backclass.style.backgroundColor ='#d6b293';
                  backclass.style.borderColor ='#c6bfb5';
                  var interval = 10;
                  var angle = 0;
                  var angle_increment = 6;
                  window.timer = window.setInterval(function() {
                    circle.setAttribute("stroke-dasharray", angle + ", 500");
                    if(angle >= 360) {
                      window.clearInterval(window.timer);
                    }
                    angle += angle_increment;
                  }.bind(this), interval);

                    setTimeout(function(){
                      var angle = 0;
                      circle.setAttribute("stroke-dasharray", angle + ", 500");
                      backclass.style.backgroundColor ='#fff';
                      }, 700);

              Response.questionresponse(this.fields)
            .then(response => {
            if(response.data.status==1){
              
                this.fields.answer='';
                let responsedata=response.data.response;
                this.questiondata.question=responsedata.question;
                this.questiondata.statement_a_text=responsedata.statement_a_text;
                this.questiondata.statement_b_text=responsedata.statement_b_text;
                this.attempted.push(responsedata.id);
                this.fields.question_id=responsedata.id;
                this.fields.rank=responsedata.rank;
                this.fields.type=responsedata.type;
                this.fields.personality_id=responsedata.personality_id;
                this.fields.statement_a_pid=responsedata.statement_a_pid;
                this.fields.statement_b_pid=responsedata.statement_b_pid;
                this.fields.attempted=this.attempted;
                this.fields.is_reverse=responsedata.is_reverse;
                this.fields.discard=response.data.discard;
                this.fields.userResults=response.data.userResults;
                this.fields.dpArray=response.data.dpArray;
                console.log(this.fields.dpArray);
                this.fields.p1=response.data.p1;
                this.fields.p2=response.data.p2;
                if(responsedata.rank==7){this.round=2;}
                else if(responsedata.rank==8){this.round=3;}
                else if(responsedata.rank==9){this.round=4;}
                this.fields.stage=response.data.stage;


                 if(responsedata.type=="B")
                  {
                  this.fields.typeBcount=response.data.typeBcount;
                    if(this.fields.typeBcount==1){
                    this.progresscount=97;
                    } 
                    else if(this.fields.typeBcount==2){
                    this.progresscount=98;
                    }
                    else if(this.fields.typeBcount==3){
                    this.progresscount=99;
                    }
                 // this.progresscount=response.data.barvalue;
                  var elem = document.getElementById('progressbar');
                  elem.style.width = this.progresscount + "%";
                  var elem = document.getElementById('progress-text');
                  elem.style.marginLeft = this.progresscount + "%";
                }
                else{
                  var totalanswered=this.attempted.length;
                  var percentage=totalanswered/75*100;
                 // this.progresscount=Math.round(percentage);
                  this.progresscount=response.data.barvalue;
                  var elem = document.getElementById('progressbar');
                  elem.style.width = this.progresscount + "%";
                  var elem = document.getElementById('progress-text');
                  elem.style.marginLeft = this.progresscount + "%";
                }

                this.stage=response.data.stage;
                this.counter=this.counter+1;
                this.qcounter=this.qcounter+1;
            }
            else if(response.data.status==0){
                this.status=response.data.status;
                this.stage=response.data.stage;
            } 
            else if(response.data.status==-1){
                this.showSame=1;
                this.showSection=0;
                //this.alertmethod();
            } 
            else if(response.data.status==4){
                alert('Your personality type is  '+response.data.winner);
                 window.location.href="https://personalitypath.com/test-results-template";
            } 
            else{
                this.questiondata.question='No Question Available';
            }

             
              
            })
            .catch(error => {
                console.log('error', error)
            });
            },
            closetest: function (event) {
                this.showClose=1;
                this.showSection=0;
            },
               resumetest: function (event) {
                this.showClose=0;
                this.showSection=1;
            },
            alertmethod: function (event) {
                  this.$fire({
                  title: "Sorry to interrupt!",
                  text: "Unfortunately there is not enough variety in your answers, therefore we won't able to calculate a reliable result for you. Please start the test again and make sure to answer honestly",
                  type: "error",
                  confirmButtonText:"RESTART TEST",
                  confirmButtonColor: "#8a6868",
                  confirmButtonColor: "#DD6B55",
                  customClass: {
                  container: 'alert-container',
                  title: 'alert-title',
                  icon: 'alert-icon',
                  content: 'alert-content',
                  confirmButton: 'alert-button',
                  },
                  showClass: {
                    popup: 'swal2-noanimation',
                    backdrop: 'swal2-noanimation'
                  },
                  hideClass: {
                    popup: '',
                    backdrop: ''
                  },
                  timer: 3000
                  }).then(r => {
                   //window.location.reload();
                  });

            },


  }
    }
</script>
