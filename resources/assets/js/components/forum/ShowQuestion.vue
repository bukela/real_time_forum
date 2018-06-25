<template>
<v-container>
        <v-card>
        <v-card-title>
          <div>
            <div class="headline">
                {{ data.title }}
            </div>
            <span class="grey--text">Asked by {{ data.user }} {{ data.created_at }}</span>
          </div>
          <v-spacer></v-spacer>
          <v-btn color="blue">5 Replies</v-btn>
        </v-card-title>
       
        <v-card-text v-html="data.body"></v-card-text>
    </v-card>
</v-container>
<!-- v-html zbog formatiranja texta koji dolazi iz baze (bold,italic,color...) -->
</template>

<script>
export default {
    props: ['data']
}
</script>

<style>

</style>
