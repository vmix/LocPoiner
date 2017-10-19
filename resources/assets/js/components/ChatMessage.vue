<template lang="html">
    <div class="chat-message">
        <p>{{message}}</p>
        <small>{{user}}</small>
    </div>
</template>

<script>
  export default {
      data() {
          return {
              message: 'Hello from chat',
              user: 'John Dow'
          }
      }
  }
</script>

<style lang="css">
    .chat-message {
        padding: 1rem;
    }

    .chat-message > p {
        margin-bottom: 5rem;
    }

</style>