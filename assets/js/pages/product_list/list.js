import React, { Component } from 'react';
import './style.css';


class ListPage extends Component {
    constructor() {
        super();

        this.state = {
            entries: []
        };
    };

    componentDidMount() {
        const fetchData = {
            method: 'GET'
        };
        fetch('/getList', fetchData)
            .then(response => response.json())
            .then(entries => {
                console.log(entries);
                this.setState({

                    entries

                });
            });
    }
    bacgroundImg(img)
    {
        var divStyle = {
            backgroundImage: 'url(' + img + ')'
        };
        return divStyle;
    }
    render() {
        const myList = this.state.entries.map((product) =>

                <div style={this.bacgroundImg(product.img)} key={product.id.toString()} className="col-lg-4 col-md-4 col-sm-6 col-xs-12 prod-box">
                    <div className="my-list">
                        {/*<img className="img-fluid img-thumbnail" src={product.img} alt={product.name}/>*/}
                        <h3 className="title">{product.name}</h3>
                        <span className=" title-label">Kategorija: </span>
                        <span className="pull-right">{product.category}</span>
                        <div className="detail">

                        </div>
                    </div>
                    <div className="bg-fog"></div>

                </div>
        );
        return (
            <div className="container">
                <div className="row">
                    {myList}
                </div>
            </div>
        );
    }
}

export default ListPage;
