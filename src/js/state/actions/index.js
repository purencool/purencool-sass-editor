import { 
    ADD_ARTICLE,  
    PASS_FILE_PATH 
  } from "../constants/action-types";

export const addArticle = article => (
    { type: ADD_ARTICLE, payload: article }
);

export const addPassFilePath = passFilePath  => (
    { type: PASS_FILE_PATH, payload: passFilePath }
);