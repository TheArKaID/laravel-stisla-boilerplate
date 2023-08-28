import {createBrowserRouter, Navigate} from "react-router-dom";
import NotFound from "./pages/NotFound";
import App from "./Layouts/App";

const router = createBrowserRouter([
  {
    path: '/',
    element: <App/>,
  },
  {
    path: "*",
    element: <NotFound/>
  }
])

export default router;