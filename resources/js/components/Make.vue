<template>
    <div class="q__make-container">
        <form action="" method="post">
            <div class="q__make-header p-1">
                <div class="field">
                    <div class="control">
                        <label for="">
                            Title: 
                            <input type="text" class="input" name="" id="">
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <label for="">
                            Description: 
                            <textarea type="text" class="input" name="" id="" rows="3" cols="3"></textarea>
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <label for="">
                            Category: 
                            <select name="category" id="category" class="input">
                                <option value="science">Science</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>

            <div class="q__make-questions p-1">
                <div class="q__questions-container">
                    <div class="q__questions-inner">
                        <div class="q__question-item" v-for="(question, i) in questions">
                            test
                        </div>
                    </div>
                </div>

                <div class="field">
                    <div class="control columns">
                        <div class="column is-one-fifth">
                            <label for="question_type">
                                Question Type:
                                <select name="question_type" id="question_type" class="input" v-model="questionType">
                                    <option value="multiple">Multiple Choice</option>
                                </select>    
                            </label>                            
                        </div>
                        <div class="column is-half">
                            <br>
                            <button type="button" class="button is-primary" @click="newQuestion()">+ Question</button>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="field p-1">
                <div class="control">
                    <button type="submit" class="button is-primary">Make!</button>  
                </div>
            </div>            
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            questions: [],
            questionType: 'multiple',
        }
    },
    methods: {
        newQuestion() {
            this.questions.push({
                type: this.questionType,
            });
        }
    }
}
</script>

<style scoped>

</style>
