/**
 * These routes are handled by Laravel, so they need to be ignored by vue-router
 * @type {[null,null,null]}
 */

export default [
  { path: '/login' },
  { path: '/register' },
  { path: '/password/reset', children: [{ path: '*' }] },
];