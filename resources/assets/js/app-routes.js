import Application from './components/Application.vue';
import Test from './components/Test.vue';

const Blank = { template: '<div></div>' }

const routes = [
    { path: '/login' },
    { path: '/register' },
    { path: '/password/reset' },
    {
        path: '/',
        component: Application,
        children: [
            { path: '/', component: Blank },
            { path: '/test', component: Test },
            { path: '*', redirect: '/' }
        ]
    }
];

export default routes;