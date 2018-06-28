import Application from './components/Application.vue';
import TestItem from './components/TestItem.vue';

const Blank = { template: '<div></div>' }

const routes = [
    // Ignore auth routes
    { path: '/login' },
    { path: '/register' },
    { path: '/password/reset', children: [{ path: '*' }] },
    // Handle all other routes
    {
        path: '/',
        component: Application,
        children: [
            { path: '/', component: Blank },
            { path: '/item1', component: TestItem, props: { item: "Item 1" } },
            { path: '/item2/create', component: TestItem, props: { item: "Item 2 create" } },
            { path: '/item2/search', component: TestItem, props: { item: "Item 2 search" } },
            { path: '/item3', component: TestItem, props: { item: "Item 3" } },
            { path: '*', redirect: '/' }
        ]
    }
];

export default routes;