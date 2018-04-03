
var axios = require('axios');

/**
 * 
 */
function getArticles(id = ''){
  if(id !== ''){
    return axios.get('http://purencool.local/jsonapi/node/article/'+id);
  }
  return axios.get('http://purencool.local/jsonapi/node/article');
}



/**
 * 
 */
function getPages(id){
    return axios.get('http://purencool.local/jsonapi/node/page');
}
  


/**
 * 
 */
function getVideo(id = ''){
  if(id !== ''){
    return axios.get('http://purencool.local/jsonapi/node/video/'+id);
  }
  return axios.get('http://purencool.local/jsonapi/node/video');
}

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
        console.log(error);
      })
  },
  pageData: function(id){
    return axios.all([getPages(id)])
      .then(function(arr){
        console.log(arr);
        return arr;
      })
      .catch(function (error) {
        console.log(error);
      })
  },
  videoData: function(id){
    return axios.all([getVideo(id)])
      .then(function(arr){
        return arr[0].data.data;
      })
      .catch(function (error) {
        console.log(error);
      })
  }
}

/**
 * 
 */
module.exports = ApiCalls;