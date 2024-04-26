<template>
    <main-layout/>
    <div class="container mb-4" >
        <div class="d-flex mb-2">
            <h5 class="card-title
            flex-grow-1">Formulaire de création de nouvelle classe</h5>
        </div>
        <form class="row g-3" @submit.prevent="submit" >
            <div class="col-6">
                <label for="inputName" class="form-label">Nom de la classe</label>
                <input name="name" v-model="form.name"  type="text" class="form-control" id="inputName">
                <div v-if="errors.name"><span style="color: red;">{{ errors.name }}</span></div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary "><i class="fas fa-save"></i> Créer</button>
                <a  href="/classes" class="btn btn-danger ms-2"><i class="fas fa-backspace"></i> Retouner à la liste</a>
            </div>
        </form>
    </div>
</template>
<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
defineProps({ errors: Object })
const form = reactive({
    name: null
})
function submit() {
    router.post('/storeClass', form)
}
</script>
