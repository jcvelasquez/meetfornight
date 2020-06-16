<template>
    <div class="input-group">
        <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">

        <span class="input-group-btn">
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
                Send
            </button>
        </span>
    </div>
</template>

<script>
    export default {
        props: ['nombre','id'],
        mounted() {

        },
        data() {
            return {
                newMessage: ''
            }
        },
        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    id: this.id,
                    nombre: this.nombre,
                    message: this.newMessage
                });

                this.newMessage = ''
            }
        }    
    }
</script>