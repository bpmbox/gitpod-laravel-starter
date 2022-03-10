const hostApi = process.env.NODE_ENV === "development" ? "https://8080-bpmbox-dreamo-1xwgi8m1ynn.ws-us34xl.gitpod.io" : "";
const portApi = process.env.NODE_ENV === "development" ? "" : "";
const baseURLApi = `${hostApi}${portApi ? `:${portApi}` : ``}/api`;

export default {
  hostApi,
  portApi,
  baseURLApi,
  remote: "https://8080-bpmbox-dreamo-1xwgi8m1ynn.ws-us34xl.gitpod.io",
  isBackend: process.env.REACT_APP_BACKEND,
  auth: {
    email: 'admin@flatlogic.com',
    password: 'password'
  },
  app: {
    colors: {
      dark: "#323232",
      light: "#FFFFFF",
    },
    themeColors: {
      warning: '#FEBE69',
      danger: '#f5695a',
      success: '#3bbf97',
      info: '#12b4de'
    }
  }
};
