<script>
import axios from 'axios';

export default {
  name: 'Todo',
  data() {
    return {
      todoArr: [],
    };
  },
  mounted() {
    axios.get('http://localhost/php-todo-list-json/Backend/').then((res) => {
      this.todoArr = res.data;
    }
    )
  }
}
</script>

<template>
  <h1>Ecco la golosa lista dei compiti da svolgere: </h1>
  <ul>
    <li v-for="(compito, index) in todoArr" :key="index">
      <span :class="compito.done ? 'text' : ''" @click="compito.done = !compito.done">{{ compito.compito }}</span>
    </li>
  </ul>
</template>

<style scoped>
.text {
  text-decoration: line-through;
}

span:hover {
  cursor: pointer;
}

.read-the-docs {
  color: #888;
}
</style>
