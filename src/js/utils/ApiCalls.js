import Config from "../state/store/Config";

var axios = require('axios');



/**
 * 
 */
var ApiCalls = {
  articleData: function(id){
    return axios.all([getArticles(id)])
      .then(function(arr){
        return arr[0].data.data;
      })
      .catch(function (error) {
        
      })
  },

  readSassDirData: function(id){
    return axios.all([axios.get(Config.readSassDir)])
      .then(function(arr){
       
        return arr;
      })
      .catch(function (error) {
      
      })
  },

  liveStyleGuide: function(id){
    return axios.all([axios.get(Config.liveStyleGuide)])
      .then(function(arr){
       
        return arr;
      })
      .catch(function (error) {
       
      })
  },

  readSassFile: function(id){
    return axios.all([axios.get(Config.readSassFile+id)])
      .then(function(arr){
       
        return arr;
      })
      .catch(function (error) {
    
      })
  },
}

/**
 * 
 */
module.exports = ApiCalls;