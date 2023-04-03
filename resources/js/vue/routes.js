const Crear = () => import('./components/Crear.vue');
const Editar = () => import('./components/Editar.vue');
const Mostrar = () =>import('./components/Mostrar.vue');


export const routes =[
    {
        name:'mostrarC',
        path:'/',
        component:Mostrar

    },
    {
        name:'crearC',
        path:'/crear',
        component:Crear

    },
    {
        name:'editarC',
        path:'/editar/:id',
        component:Editar

    }
];
