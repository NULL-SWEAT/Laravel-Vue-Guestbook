<template>
    <form>
        <div class="form-group">
            <label for="name">Name</label>
            <input v-model="name" type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input v-model="message" type="text" class="form-control" id="message" placeholder="Enter your message">
        </div>
    </form>
</template>

<script>
export default {
    data() {
        return {
            name: '',
            message: '',
        }
    }

}
</script>
