<template>
  <div class="form-group row">
    <div class="col-8">
      <input type="text" v-model="answerData.text_content" placeholder="Текст вопроса" class="form-control">
    </div>

    <div class="col-2">
      <switches v-model="answerData.is_correct_answer" theme="bootstrap" color="success"></switches>
    </div>

    <div class="col-2">
      <button type="button" class="btn btn-danger" @click="deleteAnswer">Удалить</button>
    </div>
  </div>
</template>

<script>
  import Switches from 'vue-switches';

  export default {
    data() {
      return {
        answerData: null,
      };
    },
    created() {
      this.answerData = this.answer;
    },
    props: {
      answer: {
        type: Object,
        required: true,
      },
    },
    components: {
      Switches,
    },
    methods: {
      handleAnswerUpdating() {
        this.$emit('update:answer', this.answerData);
      },
      deleteAnswer() {
        this.$emit('delete-answer');
      },
    },
    watch: {
      answerData() {
        this.handleAnswerUpdating();
      },
    },
  };
</script>

<style scoped>

</style>