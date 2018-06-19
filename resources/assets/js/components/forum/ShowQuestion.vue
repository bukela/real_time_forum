<template>
<v-container>
        <v-card>
        <v-card-title>
          <div>
            <div class="headline">
                {{ data.title }}
            </div>
          </div>
        </v-card-title>
        <v-card-text><div class="grey--text">Asked by {{ data.user }} {{ data.created_at }}</div></v-card-text>
        <v-card-text>
            <p class="body-2">{{ data.body }}</p>
        </v-card-text>
    </v-card>
</v-container>
</template>

<script>
export default {
    props: ['data']
}
</script>

<style>

</style>
