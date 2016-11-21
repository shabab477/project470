
function domCreator(container, price, location, address, contact, about)
{
    //TODO:add all the variables to the code
    var row = $('<div></div>').addClass('row');
    var col = $('<div></div>').addClass('col-md-6 col-md-offset-3');
    var card = $('<div></div>').addClass('card');

    var cardContent = $('<div></div>').addClass('card-content');
    var cardPara = $('<p></p>').text('Description: ' + about);
    cardContent.append(cardPara);

    var cardLoc = $('<div></div>').addClass('card-content');
    var cardParaLoc = $('<p></p>').text('Location: ' + location);
    cardLoc.append(cardParaLoc);
    
    var cardAddress = $('<div></div>').addClass('card-content');
    var cardParaAddress = $('<p></p>').text('Address ' + address);
    cardAddress.append(cardParaAddress);
    
    var cardPrice = $('<div></div>').addClass('card-content');
    var cardParaPrice = $('<p></p>').text('Price: ' + price);
    cardPrice.append(cardParaPrice);
    

    var cardContact = $('<div></div>').addClass('card-content');
    var cardParaContact = $('<p></p>').text('Contact: ' + contact);
    cardContact.append(cardParaContact);
    
    card.append(cardContent, cardPrice, cardAddress, cardLoc, cardContact);
    col.append(card);
    row.append(col);
    $(container).append(row);
}


