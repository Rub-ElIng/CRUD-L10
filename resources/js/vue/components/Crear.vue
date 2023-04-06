
<template>
<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" >
    <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
      <div class="text-white items-center">
        <div class="mb-8 flex flex-col items-center">

<form class="w-full max-w-lg" action="{{ route('cursos.store') }}" method="POST">
    <h1 class="block uppercase tracking-wide text-white font-bold mb-2 text-3xl" >En esta pagina prodras crear un curso</h1>
   
    
        <br>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
            <label 
            for="nom"
            class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
            >Nombre:
            </label>
            <br>
            <input 
                type="text"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="nom"
                name="name" 
                placeholder="Ingresa el nombre"
                required>
            </div>
        </div>
            <br>
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
        <label 
            for="des"
            class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
            >Descripcion:
        </label>
                <br>
            <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" 
                id="des"
                rows="5"
                name="descripcion"
                required>
            </textarea>
            <p class="text-gray-600 text-xs italic">Ingresa la descripcion del curso</p>
            </div>
            </div>
            <br>
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
        <label 
            for="cat"
            class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
            >Categoria:
        </label>
                <br>
                <input 
                type="text"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="cat" 
                name="categoria" 
                placeholder="Ingresa la categoria" 
                required>
            </div>
            </div>
        <button
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="submit">
            Crear Curso
        </button>
        

</form>
        </div>
        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
             href="{{ route('cursos.index') }}">
             Cancelar
        </a>
            
      </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            curso: {
                name: '',
                description: '',
                categoria: ''
            },
            id: 0,
            modificar: true,
            Cursos: [],
        };
    },
   
    methods: {
        async listar() {
            const res = await axios.get('/empleados');
            this.empleados = res.data;
        },

        async guardar() {
            if (this.modificar) {
                const res = await axios.put('/empleados/' + this.id, this.empleado);
                // console.log(this.id);

            } else {
                const res = await axios.post('/empleados/', this.empleado);
            }
           
            this.listar();
        }
        
    }
    
};
</script>

<style>

</style>