function check(val) {
    document.getElementById('popup').style.display="flex"
    document.getElementById('id').value = val['id']
    document.getElementById('name').value = val['name']
    document.getElementById('address').value = val['address']
    document.getElementById('city').value = val['city']
    document.getElementById('date').value = val['date']
    document.getElementById('mobile').value = val['mobile']
    document.getElementById('housename').value = val['housename']
    document.getElementById('housetype').value = val['housetype']
    document.getElementById('facilities').value = val['facilities']
    document.getElementById('image').src = "http://127.0.0.1:8001/images/"+val['image']
}