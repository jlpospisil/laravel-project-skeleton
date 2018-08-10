import Application from '../components/Application.vue';
import TestItem from '../components/TestItem.vue';

const Blank = { template: '<div></div>' }

export default [
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