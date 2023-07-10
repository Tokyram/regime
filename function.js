async function FetchApiNoData(url, method) {
    const regex = "Notification";
  
    if(!url.includes(regex)){
      showLoadingOverlay();
      await  sleep(500);
    }
  
    return fetch(url, {
      method: method,
      credentials: 'include',
      headers: {
        'Content-Type': 'application/json'
      }
    })
    .then(response => {
      hideLoadingOverlay();
  
      if (!response.ok) {
        throw new Error(`Request failed with status ${response.status}`);
      }else if(response.status == 201){
        showSuccessModal("Transaction is in pending status", 0);
      }
      
      return response.json();
    })
    .catch(error => {
      console.error('Request failed:', error);
    });
  }
  
  
  async function FetchApiWithData(urls, method, data){
      showLoadingOverlay();
      await  sleep(500);
  
      const url = urls;
      
      return fetch(url, {
      method: method,
      credentials: 'include',
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
      })
      .then(response => {
        hideLoadingOverlay();
          if (!response.ok) {
              console.log(response.body);
              throw new Error(`Request failed with status ${response.status}`);
              //throw new Error();
          }else if(response.status == 201){
            showSuccessModal("Transaction is in pending status", 0);
          }
          else{
            return response.json();
          }
      });
    
          //console.error('Request failed:', error);
    
  
  }
  