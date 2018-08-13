<template>
    <div>
        <template v-if="entries.length > 0">
            <div class="card card-body mb-2" v-for="entry in entries" v-bind:key="entry.id">
                <h3>{{ entry.title }}</h3>
                <p>{{ entry.body }}</p>
            </div>
        </template>
        <template v-else>
            <p>No entries.</p>
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
        this.fetchEntries();
    },
    methods: {
        fetchEntries() {
        let vm = this;
        fetch('api/entries')
            .then(res => res.json())
            .then(res => this.entries = res.data)
            .catch(err => console.log(err));
        },
    }
}
</script>
