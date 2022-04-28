
import React from "react";
import { Component } from "react";
// import { useState } from "react";



export default class MainContent extends Component{
    // const [state, setState] = useState('0');
    
    constructor(props) {
        super(props);
        this.state = {
            date: new Date(),
            myprops : props,
            pageTitle: 'Customers',
            customers:[
                {id:1,name:"scott",image: require("./img/cds.jpg"),phones:null,address: {city: 'New York'}},
                {id:2,name:"Tim",image: require('./img/d.jpg'),phones:"123-456", address: {city: 'New York'}},
                {id:3,name:"Jacob",image: require('./img/dced.jpg'),phones:null,address: {city: null}},
                {id:4,name:null,image: require('./img/cds.jpg'),phones:"823-996",address: {city: 'Daveyton'}},
                {id:5,name:"Sibusiso",image: require('./img/cds.jpg'),phones:null,address: {city: 'New Dehli'}}
            ]
            ,
            customersCount: 5

        
        };
      }

    
      onRefreshClick = () => {

        //   Mess with the state and variable property for data interchange
        if (this.state.pageTitle == 'Customers') {
        //   console.log('Props = ',this.state.pageTitle);
          this.state = this.setState({pageTitle : 'Suppliers'
            ,customersCount : 5
        })
        
        }
        else{
            this.state = this.setState({pageTitle : 'Customers'
            ,customersCount : 0
        })
        }
        
      }

      getCustomerRows = () => {
        return (this.state.customers.map( (cust)=>{
            return(
                <tr key={cust.id}>
                    {/* Render Rows Conditionally */}
                    <td
                    style={{backgroundColor: 'red  !important' }}
                    >{cust.id}</td>
                    <td>{this.getCustomerName(cust.name)}</td>
                    <td>{this.getCustomerImage(cust.image)}</td>
                    <td>{this.getPhoneToRender(cust)}</td>
                    <td>{this.getAddressToRender(cust.address.city)}</td>
                </tr>
            );
        }))
      }

      getPhoneToRender = (cust) => {
            if(cust.phones){
                return cust.phones;
            }
            else{
                return <div className="bg-warning p-2 text-center" title={this.state.pageTitle}>No Phone</div> ;
            }   
      }

    //   For address'
    getAddressToRender = (address_city) => {
        if(address_city){
            return address_city
        }
        else{
            return <div className="bg-warning p-2 text-center" title={this.state.pageTitle}>No Address</div> ;
        }   
    }

    getCustomerName = (custname) => {
        if(custname){
            return custname;
        }
        else{
            return <div className="bg-warning p-2 text-center text-black" title={this.state.pageTitle}>No Customer Name</div> ;
        }   
    }

    getCustomerImage = (custimage) => {
        if(custimage){
            return <img src={custimage} />;
        }
        else{
            return <div className="bg-warning p-2 text-center text-black" title={this.state.pageTitle}>No Customer Image</div> ;
        }   
    }


    render(){
        return (
            <div>
                <h4 className="border-bottom m-1 p-1">
                    {this.state.pageTitle}
                    <span className="badge badge-secondary m-1 bg-dark p-1 m" customersCount={this.state.customersCount} >{this.state.customersCount} </span>
                    <button className="btn btn-info" onClick={this.onRefreshClick}>Refresh</button>
                </h4>
                <table className="table table-responsive text-white bg-primary table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>Image</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>  
                        {this.getCustomerRows()}
                    </tbody>
                </table>

            </div>
        );
    }

    
}