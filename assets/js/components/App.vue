<template>
    <div>
        <h1><span>Minha página inicial</span></h1>
        <ola-msg></ola-msg>
    </div>    
</template>

<!-- componente OlaMsg incluído -->
<script>
    import OlaMsg from './OlaMsg';
    export default {
        name: 'App',
        components: {
            OlaMsg
        }
    }
</script>

<!-- adicione o atributo “scoped” para limitar o CSS apenas a este componente -->
<style scoped>
    span {  color: chocolate;  }
</style>