$.ajax({
  type: 'GET',
  url: 'https://affiliate-api.flipkart.net/affiliate/offers/v1/dotd/json',
  headers: {"Fk-Affiliate-Id" : "idealequa" , "Fk-Affiliate-Token" : "6617fcbb631348da8cb27d76f0dc39b0"},
  success: function(data) {
    console.log(success, data); //returns all of johnbob's friends
  }
});