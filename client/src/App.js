import React, { Component } from 'react'
import './App.css'
import 'bootstrap/dist/css/bootstrap.min.css';
import List from './List'

class App extends Component {
    constructor(props) {
        super(props)
        this.state = {
            term: '',
            items: []
        }
    }

    render() {
        return (
            <div className="container">
                <div className="row">
                    <div className="col-md-6 mx-auto">
                        <h1 className="text-center">Rentalist Property Tags Manager</h1>
                        <List />
                    </div>
                </div>
            </div>
        )
    }
}

export default App
