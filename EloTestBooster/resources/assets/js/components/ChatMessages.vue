<template>
    <div class="chat">
        <div class="chat_from d-flex flex-column" v-for="(message , index) in messages" :key="index">
            <div class="chat-info">
                <strong class="primary-font" style="text-align:right;">
                    {{ message.user.name }}
                </strong>
                <strong class="primary-font" style="text-align:right;margin-left:30px;">{{ message.user.created_at }}</strong>
            </div>
            <div class="chat_wrapper d-flex">
                    {{ message.message }}
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    props: ['messages']
  };
</script>
