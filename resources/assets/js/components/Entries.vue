<template>
    <div>

        <template v-if="entries.length > 0">
            <div class="row">
                <div class="card card-body border-success shadow mt-4 mx-2 col-sm-12 col-md-auto d-flex" v-for="entry in entries" v-bind:key="entry.id">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p><b>{{ entry.name }}</b> says:</p>
                            <h4>{{ entry.message }}</h4>
                            <small>{{ entry.created_at }}</small>
                        </div>
                        <div>
                            <button class="btn btn-outline-danger btn-sm" @click="deleteEntry(entry.id)">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <template v-else>
            <h3 class="mt-4">No entries.</h3>
        </template>
        </div>
</template>

<script>
export default {
    data() {
        return {
            entries: [],
        }
    },
    created() {
        this.fetchEntries()
    },
    methods: {
        fetchEntries() {
            let vm = this
            fetch('api/entries')
                .then(res => res.json())
                .then(res => this.entries = res.data)
                .catch(err => console.log(err))
        },
        deleteEntry(id) {
            fetch(`api/entries/${id}`, {
                method: 'delete'
            })
            .then(() => this.fetchEntries())
            .catch(err => console.log(err))
        },
    }
}
</script>
