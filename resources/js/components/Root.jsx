
import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom/client';
import { useParams } from 'react-router-dom';
import Global from '../Global';

import axios from 'axios';


export function UploadImage(){
    const [images, setImages] = useState([]);

    const { id } = useParams();
    const [product, setProduct] = useState(null);
    
  const [isUploadDisabled, setUploadDisabled] = useState(false);
      const [formData, setFormData] = useState({});

    const currentUrl = window.location.href;
    const match = currentUrl.match(/\/powerup\/product\/(\d+)\/edit/);
    const productId = match ? match[1] : null;

    useEffect(() => {
      fetchImages();
    }, []);

    
  const fetchImages = async () => {
    try {
      // Replace 'YOUR_API_ENDPOINT' with the actual endpoint that serves image data
      const response = await axios.get(`${Global.api}/product-images/${productId}`);
      setImages(response.data); // Assuming the response contains an array of image data
      console.log('get',response.data);
    } catch (error) {
      console.error('Error fetching images:', error);
    }
  };

  const uploadNewImage = async (e) => {
    
        e.preventDefault();
        //    console.log(e.target.image.value);

        setUploadDisabled(true);
        const uploadFormDataArray = new FormData();
        uploadFormDataArray.append('product_id', parseInt(productId));
        uploadFormDataArray.append('image_title', e.target.image_title.value);
        uploadFormDataArray.append('image', e.target.image.files[0]); 

       console.log(uploadFormDataArray);

   try {
       const response = await axios.post(`${Global.api}/store-image-data`, uploadFormDataArray);
       const responseData = response.data;
       
       console.log(responseData.data.data);
       if(response.status == 200){    
        
            const updatedImages = [...images, responseData.data.data];

            // Update the state with the new array
            // setImages(updatedImages);
            
            console.log(images);
            setUploadDisabled(false);

            successNotify('New Image Uploaded.');
            ImageUploadForm.reset();
              fetchImages();
       }

     } catch (error) {
       // Handle error scenarios
       console.error('Error:', error);
     }

  }

const deleteImage = async (id) => {
    
    const formDataArray = {
        'id' : parseInt(id),
    };

    try {
        const response = await axios.delete(`${Global.api}/delete-image-data/${id}`, formDataArray);
        const responseData = response.data;
        
        // const updatedImages = images.filter((image) => image.id !== response.data.deletedImage.id);
        const deletedImages = images.filter((image) => image.id !== response.data.deletedImage.id);

        setImages(deletedImages);
        dangerNotify('Image Deleted Successfully');
        return;

        // console.log(responseData);
      } catch (error) {
        // Handle error scenarios
        console.error('Error:', error);
      }
  };

  const updateImageData = async (e) =>{
   const productId = e.target.productId.value;
    e.preventDefault();

        const formDataArray = {
            'id' : parseInt(e.target.productId.value),
            'image_title' : e.target.image_title.value,
        };

    try {
        const response = await axios.put(`${Global.api}/update-image-data/${productId}`, formDataArray);
        const responseData = response.data;
        successNotify('Image Data Updated');
        
        console.log(responseData);
      } catch (error) {
        // Handle error scenarios
        console.error('Error:', error);
      }
  }

    return (
        <>
        <div className="card">
            <div className="card-header">
                <h5>Image Upload</h5>
            </div>
    
            <div className="card-body">
              
                <form id="ImageUploadForm" onSubmit={uploadNewImage} 
                    encType='multipart/form-data'
                    className="digital-add needs-validation">
                    <div className="row">
                        <div className="col">
                            <label htmlFor="validationCustom02" className="col-form-label"><span>*</span>
                            Image</label><br />
                            <input className="col"  type="file" accept="image/*" name="image" id="image" />
                        </div>
                        
                        <div className="col">
                            <label htmlFor="validationCustom02" className="col-form-label" id="image_title">Image Title</label>
                            <input className="col form-control"  type="text"  name="image_title" />
                        </div>
    
                        <div className="col">
                            <br />
                            <button disabled={isUploadDisabled} type="submit" 
                                className='btn btn-primary pull-right'>{isUploadDisabled? 'Uploading Image': 'Upload Image'}</button>
                        </div>
                    </div>
                </form>
                <hr className='my-5'/>

                {images.map((image, index) => (
                    <div key={index}>
                    <form onSubmit={updateImageData} className="row mb-4"
                        
                        style={{alignItems: 'center', display: 'flex'}}>
                        <div className="col items-center">
                            <img className="rounded" height="100" src={`${Global.baseUrl}/web/media/xs/${image.image}`} alt={`Image ${index}`} />
                        </div>
                        <input type="hidden"  value={image.id} id="productId" name="productId"/>
                        
                        <div className="col items-center">
                            <input className="col form-control"  type="text"  name="image_title"
                                defaultValue={image.image_title}/>
                        </div>
                        

                        <div className="col items-center pull-right align-right">                        
                            <button type="submit" 
                                    className="btn btn-primary btn-sm editBtn"
                                    ><i className="fa fa-save text-white"></i></button>

                        <button type="button" onClick={()=> deleteImage(image.id)}
                        className="btn btn-dark btn-sm deleteBtn" ><i className="fa fa-trash text-white"></i></button>      
                           
                        </div>

                    </form>                  
                     </div>
                ))}
            </div>
        </div>
        </>
      )
}



function ProductInquiry({ inquiryId }) {

  const handleUpdateStatus = async ({inquiryId}) =>{
    alert(inquiryId);
  }
  const handleClick = async () => {
    try {
      console.log('process.env', Global.api);

      // Fetch data from the API
      const response = await fetch(`${Global.api}/product-inquiry/${inquiryId}`);
      
      // Check if the response is successful
      if (!response.ok) {
        throw new Error('Failed to fetch data');
      }
      
      const data = await response.json();

      console.log('data', data);
      console.log(data[0].product_inquiry.name);

      const result = document.getElementById('result');
      const tableBodyResult = document.getElementById('tableBodyResult');
      const htmlContent = data.map(item => `<tr><td><img width='60' src="../web/media/md/${item.product.image.image}" /><strong>${item.product.name}</strong></td><td>${item.quantity}</td></tr>`).join('');

      const name = document.getElementById('name');
      const phone = document.getElementById('phone');
      const email = document.getElementById('email');
      const address = document.getElementById('address');
      const message = document.getElementById('message');

      console.log('status', status)
      // alert(statusStatus);
      const productInquiryStatusUpdate = document.getElementById('product-inquiry-status-update');
      const btnUpdateStatusHTML = `<button class="btn btn-primary" id="product-inquiry-status-update" type="button" onClick="handleUpdateStatus(${inquiryId})">Update Status</button>`;

      // const stauts = document.getElementById('status');

    // Assuming your API status is stored in a variable called apiStatus
    var apiStatus = data[0].product_inquiry.status; // Example API status
    
    // Find the select element by its id
    var selectElement = document.getElementById("status");
    
    // Loop through each option to find the one that matches the API status
    for (var i = 0; i < selectElement.options.length; i++) {
        var option = selectElement.options[i];
        
        // alert(data[0].product_inquiry.status)

        if (option.value === apiStatus) {
            // Set the selected attribute of the matching option
            option.setAttribute("selected", "selected");
            break; // Exit the loop since we found the matching option
        }
        else{
          option.removeAttribute("selected");
        }
        
    }

      
      if (tableBodyResult) {
        tableBodyResult.innerHTML = htmlContent;
      }
      
      if (name) {
        name.innerHTML = data[0].product_inquiry.name;
      }

      if (phone) {
        phone.innerHTML = data[0].product_inquiry.phone;
      }

      if (email) {
        email.innerHTML = data[0].product_inquiry.email;
      }

      if (address) {
        address.innerHTML = data[0].product_inquiry.address;
      }
      if (message) {
        message.innerHTML = data[0].product_inquiry.message;
      }
      
      if (productInquiryStatusUpdate) {
        productInquiryStatusUpdate.innerHTML = btnUpdateStatusHTML;
      }



      
      // Check if data is an array
      if (!Array.isArray(data)) {
        throw new Error('Data is not in the expected format');
      }
      
       

      
      // Construct HTML content for the table body
      // const htmlContent = data.map(item => `<tr><td><img height={100} src=./web/media/md/${item.product.image.image}/>${item.product.name}</td><td>${item.name}</td></tr>`).join('');
      
      // Set HTML content of the table body
      
      if (result) {
        // Update the cart number
        result.innerText = inquiryId;
      }
    } catch (error) {
      console.error('Error fetching data:', error);
      // Handle error state or display an error message
    }
  }

  return (
    <>
      <a
        className="btn btn-warning btn-sm editBtn btnInquiryDetail" 
        data-products="{{$inquiry->quantities}}"
        data-bs-toggle="modal"
        data-bs-target="#InquiryModal"
        onClick={handleClick}
      >
        <i className="fa fa-eye text-white"></i>
      </a>   
    </>
  )
}


function ProductInquiryStatusUpdate({ productId }){
  const handleClick = async (e) => {
    var status = document.getElementById('status');
    
    alert(productId)
    
    const response = await fetch(`${Global.api}/product-inquiry/${productId}`);

      
    // Check if the response is successful
    if (!response.ok) {
      throw new Error('Failed to fetch data');
    }
  }
  return(
    <>
      <button className="btn btn-primary" id="product-inquiry-status-update" type="submit" 
        onClick={handleClick}
      >Update Status 00 {productId}</button>  
    </>
  )

}
export default ProductInquiry;


if (document.getElementById('image-uploader')) {
  const Index = ReactDOM.createRoot(document.getElementById("image-uploader"));
  
      Index.render(
          <React.StrictMode>
              <UploadImage/>
          </React.StrictMode>
      )
  }

  if (document.querySelectorAll('product-inquiry-block')) {
  document.querySelectorAll('.product-inquiry-block').forEach(element => {
    const inquiryId = element.getAttribute('inquiry-id'); // Fetch attribute from current element
    const ProductInquiryDom = ReactDOM.createRoot(element);
    ProductInquiryDom.render(
      <React.StrictMode>
        <ProductInquiry inquiryId={inquiryId} />
      </React.StrictMode>
    );
  });
  }

  
  // if (document.getElementById('product-inquiry-status-update')) {
  //   const Index = ReactDOM.createRoot(document.getElementById("product-inquiry-status-update"));
  //   const productId = document.getElementById("inquiry-id");
  //   // console.log('inquiry-id', inquiry-id)
  //   // const productId = element.getAttribute('inquiry-id');
  //       Index.render(
  //           <React.StrictMode>
  //               <ProductInquiryStatusUpdate productId={productId}/>
  //           </React.StrictMode>
  //       )
  //   }


  if (document.getElementById('product-inquiry-status-update')) {
    const Index = ReactDOM.createRoot(document.getElementById("product-inquiry-status-update"));
    const productIdElement = document.getElementById("inquiry-id");
    
    // Check if the element exists before accessing its attribute
    if (productIdElement) {
        const productId = productIdElement.getAttribute('inquiry-id');
        
        Index.render(
            <React.StrictMode>
                <ProductInquiryStatusUpdate productId={productId}/>
            </React.StrictMode>
        );
    } else {
        console.error("Element with id 'inquiry-id' not found.");
    }
}
