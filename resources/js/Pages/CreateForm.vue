<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
defineProps({ errors: Object })
const form = reactive({
    first_name: null,
    last_name: null,
    email: null,
    class_id: null
})
function submit() {
    router.post('/storeStudents', form)
}
</script>
<template>
    <main-layout/>
    <div class="container mb-4" >
        <div class="d-flex mb-2">
            <h5 class="card-title flex-grow-1">Formulaire de création de nouvel étudiant</h5>
        </div>
        <form class="row g-3" @submit.prevent="submit" >
            <div class="col-6">
                <label for="inputName" class="form-label">Nom(s)</label>
                <input name="first_name" v-model="form.first_name"  type="text" class="form-control" id="inputName">
                <div v-if="errors.first_name"><span style="color: red;">{{ errors.first_name }}</span></div>
            </div>
            <div class="col-6">
                <label for="inputFirstname" class="form-label">Prénom(s)</label>
                <input name="last_name" v-model="form.last_name"  type="text" class="form-control" id="inputFirstname">
                <div v-if="errors.last_name"><span style="color: red;">{{ errors.last_name }}</span></div>
            </div>
            <div class="col-6">
                <label for="inputDatenaissance" class="form-label">Email</label>
                <input name="email"  v-model="form.email" type="email" class="form-control" id="inputEmail">
                <div v-if="errors.email"><span style="color: red;">{{ errors.email }}</span></div>
            </div>
            <div class="col-6">
                <label for="selectNiveauScolaire" class="form-label">Niveau scolaire</label>
                <select name="class_id" v-model="form.class_id"  id="selectNiveauScolaire" class="form-select">
                    <option value=""></option>
                     <option v-for="classes in classes" :value="classes.id" :key="classes.id">{{ classes.name }}</option>
                </select>
                <div v-if="errors.class_id"><span style="color: red;">{{ errors.class_id }}</span></div>
            </div>

            <div class="col-12">
                <button type="submit" :disabled="form.processing" class="btn btn-primary "><i class="fas fa-save"></i> Créer</button>
                <a  href="/students" class="btn btn-danger ms-2"><i class="fas fa-backspace"></i> Retouner à la liste</a>
            </div>
        </form>
    </div>
</template>

