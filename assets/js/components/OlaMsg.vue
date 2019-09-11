<template>
    <h2>
        <span>
            {{ msg }}
        </span>
    </h2>
</template>

<script>
    export default {
    name: 'OlaMsg',
    data() {
        return {
        	msg: 'Olá! Aqui está seu aplicativo Vue.js'
        }
    }
    }
</script>

<!-- adicione o atributo “scoped” para limitar o CSS apenas a este componente -->
<style scoped>
    span {  color: blue;  }
</style>

