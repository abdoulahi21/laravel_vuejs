<template>
    <main-layout/>
    <div class="container">
        <div class="d-flex mb-2" >
            <h5 class="card-title
            flex-grow-1">Liste des classes</h5>
            <div class="d-flex ">
                <a href="/createClass"  class="btn btn-link d-block"> <i class="fas fa-user-plus"></i> Ajouter une nouvelle classe</a>
                <input type="text" name="" id="" class="form-control">
            </div>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <th class="text-center">Nom de la classe</th>
            <th class="text-center">Action</th>
            </thead>
            <tbody>
            <tr v-for="classes in classes" :key="classes.id">
                <td class="text-center"> {{ classes.name }} </td>
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
