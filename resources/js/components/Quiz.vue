<template>
    <div class="quiz-container">
        <button @click="startQuiz()" class="button is-primary">Start</button>
        <p>
            <small>*Time will start when you press the button. Press it when you're ready.</small>
        </p>

        <div class="card">
            <div class="card-content">
                <p class="title is-3">
                    {{ activeQuestion.body }}                    
                </p>
                <div>
                    <label :for="'q' + qIndex + 'c' + c" v-for="(choice, c) in activeQuestion.choices">
                        <input type="radio" :id="'q' + qIndex + 'c' + c" :name="'qchoice' + activeQuestion.id" :value="choice" @click="saveChoice(activeQuestion, choice);"/>     
                        {{ choice }}
                    </label>
                </div>
            </div> 
            <div class="q__progress-bar has-background-primary"></div>       
        </div> <!-- .card -->
        <div>
            <button class="button is-primary" @click="prevQuestion">Previous</button>
            <button class="button is-primary" @click="nextQuestion">Next</button>
            <button class="button is-primary is-pulled-right" type="submit">Submit</button>
        </div>
    </div><!-- .quiz-contaienr -->
</template>

<script>
    export default {
        props: [
            'questions',
            'test',
        ],
        computed: {
            questionsArr() {
                return JSON.parse(this.questions);
            },
            qIndex() {
                return this.questionsArr.indexOf(this.activeQuestion);
            },
            //percent of user's progress
            qPct() {
                return ((this.qIndex + 1) / this.questionsArr.length) * 100;
            }
        },
        data() {
            return {
                activeQuestion: [],
            }
        },
        created() {                      
            this.init();            
        },
        mounted() {
            //progressbar
            this.progressBar();
        },
        methods: {
            init() {
                //test. split choices string
                this.questionsArr.forEach(function(item, index) {            
                    item['choices'] = item['choices'].split('2');
                    item['user_answer'] = '';
                });
                //load active question 
                this.activeQuestion = this.questionsArr[0];
            },
            startQuiz() {

            },
            //save user's answer on each question
            saveChoice(question, choice) {
                question['user_answer'] = choice;
            },
            //prev
            prevQuestion() {                
                if( this.qIndex > 0 ) {
                    this.activeQuestion = this.questionsArr[this.qIndex - 1];                
                    //unheck all radios
                    this.uncheckRadios();
                    //check previously checked radio(s)
                    this.checkAnsweredRadios();

                    this.progressBar();
                }     
            },
            //next
            nextQuestion() {                
                if( this.qIndex < this.questionsArr.length - 1 ) {
                    this.activeQuestion = this.questionsArr[this.qIndex + 1];
                    //unheck all radios
                    this.uncheckRadios();
                    //check previously checked radio(s)
                    this.checkAnsweredRadios();

                    this.progressBar();
                }                             
            },
            //progressbar progress
            progressBar() {
                let progressBar = document.querySelector('.q__progress-bar');
                progressBar.style.width = this.qPct + '%';
            },
            /*
                uncheck all radio choices on next / prev
                this is needed because if a user selects an answer, the next or prev choices will be
                checked on the same index as the checked choice
            */
            uncheckRadios() {
                let radios = document.querySelectorAll('input[type=radio]');
                
                radios.forEach( function(item, index) {                    
                    item.checked = false;                    
                } );
            },
            //check previoulsy checked radio
            checkAnsweredRadios(dir) { 
                let cIndex = this.activeQuestion['choices'].indexOf(this.activeQuestion['user_answer']);
                let cId = '#q' + this.qIndex + 'c' + cIndex;

                //needs few milliseconds to load dom elements, if i dont set timeout radio = null
                setTimeout( function() {
                    let radio = document.querySelector( cId ); 
                    if( radio ) {
                        radio.checked = true;
                    }           
                }.bind(this), 0 );                
            }
        }
    }
</script>

<style scoped>
    .quiz-container {
        width: 50%;
    }

    .card {
        position: relative;
        width: 100%;
        margin: 10px 0;
    }

    .q__progress-bar {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 6px;
        width: 0%;
        transition: width 0.2s ease;
    }

</style>