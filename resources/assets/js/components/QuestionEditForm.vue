<template>
  <div class="row">
    <div class="col-12">
      <h4 class="page-title">
        Редактирование вопроса
      </h4>
    </div>

    <div class="col-12">
      <div class="card-box">
        <form :action="actionUrl" method="post">

          <div class="form-group row">
            <label class="col-2" for="text_content">Текст вопроса</label>
            <div class="col-10">
              <input type="text" id="text_content" class="form-control" v-model="question.text_content">
            </div>
          </div>

          <div class="form-group row">
            <label for="question_form_id" class="col-2">Форма вопроса</label>
            <div class="col-10">
              <vue-select id="question_form_id" class="form-control" :options="questionTypes" placeholder="Тип вопроса"
                          v-model="selectedForm">
              </vue-select>
            </div>
          </div>

          <answer :answer.sync="answer" v-for="(answer, index) in question.form.answers" :key="`answer-${index}`"
                  @delete-answer="deleteAnswer(index)">
          </answer>

          <div class="form-group row">
            <button type="button" class="btn btn-info" @click="addAnswer">Добавить ответ</button>
          </div>

          <div class="form-group row">
            <button type="button" class="btn btn-success" @click="save">Сохранить</button>
          </div>

          <div class="form-group row">
            <button type="button" class="btn btn-danger" @click="deleteQuestion">Удалить</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</template>

<script>
  import VueSelect from 'vue-select';
  import axios from 'axios';
  import swal from 'sweetalert2';
  import 'sweetalert2/dist/sweetalert2.min.css';
  import Answer from './QuestionFormAnswer';

  export default {
    data() {
      return {
        selectedForm: null,
      };
    },
    created() {
      this.selectedForm = {
        label: this.formTypes[this.question.form.type],
        value: this.question.form.type,
      };
    },
    props: {
      question: {
        type: Object,
        required: true,
      },
      formTypes: {
        type: Object,
        required: true,
      },
    },
    components: {
      VueSelect,
      Answer,
    },
    computed: {
      actionUrl() {
        return `/api/admin/question/${this.question.id}`;
      },
      questionTypes() {
        return Object.keys(this.formTypes).map(type => ({
          label: this.formTypes[type],
          value: type,
        }));
      },
    },
    methods: {
      deleteAnswer(index) {
        this.question.form.answers.splice(index, 1);
        this.$forceUpdate();
      },
      addAnswer() {
        this.question.form.answers.push({
          is_correct_answer: false,
          text_content: '',
        });
        this.$forceUpdate();
      },
      save() {
        axios.patch(`/admin/question/${this.question.id}`, {
          text_content: this.question.text_content,
          form_type: this.selectedForm.value,
          answers: this.question.form.answers.map(answer => ({
            id: answer.id,
            text_content: answer.text_content,
            is_correct_answer: answer.is_correct_answer,
          })),
        })
          .then(() => {
            swal('Успех!', 'информация обновлена', 'success');
          })
          .catch(error => {
            swal('Ошибка!', error.response.data.message, 'error');
          });
      },
      deleteQuestion() {
        axios.delete(`/admin/question/${this.question.id}`)
          .then(() => {
            window.location.href = `/admin/test/${this.question.test_id}/questions`;
          });
      }
    },
  };
</script>

<style scoped>

</style>