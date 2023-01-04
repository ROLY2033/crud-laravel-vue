<script setup>
    import useSkills from '../../composables/skills';
    import { onMounted } from 'vue';

    const { skills , getSkills, destroySkill} = useSkills();
    // enviar la como funcion getSkills
    onMounted(()=> getSkills())
</script>
<template>
<div class="mt-12">

<div class="overflow-x-auto relative">
    <div class="flex justify-end m-2 p-2">
        <RouterLink :to="{name: 'SkillCreate'}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-800 text-white rounded">Nueva habilidad</RouterLink>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Slug
                </th>
                <th scope="col" class="py-3 px-6">
                </th>
                <th scope="col" class="py-3 px-6">
                </th>
            </tr>

        </thead>
        <tbody>
            <tr v-for="skill in skills" :key="skill.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-4 px-6">
                    {{skill.name}}
                </td>
                <td class="py-4 px-6">
                    {{skill.slug}}
                </td>
                <td class="py-4 px-6">
                    <RouterLink :to="{name:'SkillEdit' , params: {id: skill.id}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-800 rounded text-white ">
                        edit
                    </RouterLink>
                    <button @click="destroySkill(skill.id)" type="submit" class="px-4 ml-3 py-2 bg-red-500 hover:bg-red-800 rounded text-white ">eliminar</button>

                </td>

            </tr>

        </tbody>
    </table>
</div>

    </div>

</template>
