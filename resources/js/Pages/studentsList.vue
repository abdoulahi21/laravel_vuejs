
<!--<script>
import MainLayout from "../Layouts/MainLayout.vue";
export default {
layout: MainLayout,
};
</script>-->
<template>
<main-layout/>
    <div class="container">
        <div class="d-flex mb-2" >
            <h5 class="card-title flex-grow-1">Liste des étudiants</h5>
            <div class="d-flex ">
                <a href="/createStudents"  class="btn btn-link d-block"> <i class="fas fa-user-plus"></i> Ajouter un nouvel étudiant</a>
                <input type="text" name="" id="" class="form-control">
            </div>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <th class="text-center">Nom(s)</th>
            <th class="text-center">Prénom(s)</th>
            <th class="text-center">Email</th>
            <th class="text-center">Classe</th>
            <th class="text-center">Action</th>
            </thead>

            <tbody>
            <tr >
                <td class="text-center"> Test </td>
                <td class="text-center">Test </td>
                <td class="text-center">Test</td>
                <td class="text-center">Test</td>
                <td class="text-center">
                    <button class="btn btn-link"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-link"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            </tbody>

        </table>
    </div>

</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
</script>
