<template>
    <form @submit.prevent="submitEntry" class="mt-4">
        <div class="form-group">
            <label for="name">Name</label>
            <input v-model="entry.name" type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input v-model="entry.message" type="text" class="form-control" id="message" placeholder="Enter your message">
        </div>

        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            entry: {
                name: '',
                message: '',
            }
        }
    },

    methods: {
        submitEntry() {
            if(this.entry.name && this.entry.message) {
                fetch('api/entries', {
                    method: 'post',
                    body: JSON.stringify(this.entry),
                    headers: { 'content-type': 'application/json' }
                })
                .then(res => this.$router.push('/'))
                .catch(err => console.log(err))
            }
        }
    }

}
</script>
