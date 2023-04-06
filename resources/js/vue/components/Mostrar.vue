<template>
    <div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" >
        <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
          <div class="text-white">
            <div class="mb-8 flex flex-col items-center">
                <h1 class="block uppercase tracking-wide text-white font-bold mb-2 text-3xl" >Bienvenido a la pagina principal de Cursos</h1>
                        <br>
                        <table class="table-auto">
                            <thead>
                              <tr>
                                <th class="text-1xl">CURSO</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    <ul v-for="cur in Cursos" :key="cur" class="list-disc ">                                     
                                      <li>
                                          <RouterLink class=" text-white px-4 py-2  tracking-wider" router-link to="{name:'edit', params:{edit:cur}}">{{ cur.name }}</RouterLink>
                                      </li>
                                    </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                
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
            Cursos: [],
        };
    },
    mounted(){
      this.listar();
    },
    methods: {
        async listar() {
            const res = await axios.get('/cursos');
            this.Cursos = res.data.data;
            console.log(this.Cursos);
        },
    }
    
};

</script>

<style>

</style>
