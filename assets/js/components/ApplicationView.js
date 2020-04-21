import React, {Component} from 'react';
import {Route, Switch, Redirect, Link, withRouter} from 'react-router-dom';
import Container from '@material-ui/core/Container';
import Grid from '@material-ui/core/Grid';

class ApplicationView extends Component {
    constructor(props) {
        super(props);
        this.state = {
            error: null,
            isLoaded: false,
            articles: []
        };
    }

    componentDidMount() {
        fetch("/api/items")
            .then(res => res.json())
            .then(
                (result) => {
                    this.setState({
                        isLoaded: true,
                        articles: result.items
                    });
                },
                (error) => {
                    this.setState({
                        isLoaded: true,
                        error
                    });
                }
            )
    }

    render() {
        return (
            <Container maxWidth="xs">
                <Grid container spacing={1}>
                    <Grid container item xs={12} spacing={1}>
                    </Grid>
                    <Grid container item xs={12} spacing={1}>
                    </Grid>
                    <Grid container item xs={12} spacing={1}>
                    </Grid>
                </Grid>
            </Container>
        )
    }
}

export default ApplicationView;