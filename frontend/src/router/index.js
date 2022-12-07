import { createRouter, createWebHistory } from "vue-router";
import  Index  from "../views/pages/Index.vue";
import  ProductDetails  from "../views/pages/ProductDetails.vue";
import  Product  from "../views/pages/Product.vue";

const routes = [
    { path: "/", component: Index },
    { path: "/product", component: Product },
    { path: "/product-details", component: ProductDetails },
];

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});




export default router;