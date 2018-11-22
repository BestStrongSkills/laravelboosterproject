<template>
    <div class="chatbox-input">
        <input v-model="newMessage" v-on:keyup="enterSendMessage" id="btn-input" type="text" name="message" placeholder="Type and hit enter"/>
        <button id="btn-chat" @click="sendMessage"><i class="fa fa-comment-alt"></i></button>
    </div>
</template>


<script>
    export default {
        props: ['user'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage
                });

                this.newMessage = ''
            },
            enterSendMessage: function(e){
                if(e.keyCode === 13){
                    this.$emit('messagesent', {
                        user: this.user,
                        message: this.newMessage
                    });
                    this.newMessage = ''
                }
            }
        }    
    }
</script>