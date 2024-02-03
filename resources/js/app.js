import { createApp } from "vue";
import ProgressChart from "./components/ProgressChart.vue";

import "./bootstrap";

const app = createApp();

app.component("progress-chart", ProgressChart);

app.mount("#app");
