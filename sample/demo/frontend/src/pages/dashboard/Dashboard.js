import React from 'react';
import { useSelector } from 'react-redux';
import {
    Row,
    Col,
} from 'reactstrap';

import reactLogo from '../../images/react-logo.svg'

import Widget from '../../components/Widget';

import s from './Dashboard.module.scss';

const Dashboard = () => {
    const currentUser = useSelector((store) => store.auth.currentUser);

    return (
        <div className={s.root}>
            <h1 className="page-title">Welcome, {currentUser ? (currentUser.firstName || "User") : "User"}! <br/>
                <small>
                    <small>Your role is {currentUser && currentUser.role}</small>
                </small>
            </h1>
            <a href="https://github.com/bezkoder/react-table-crud-example/tree/master/src/components" target="blank">react crud table</a>
            {/** 
            <h3>gas https://script.google.com/u/1/home/projects/1T8Kz1WlNaX483ZbY9nArb6CCOjzxLfVBnmpGG0ODtEIMLYcIQUyhSp9O/edit</h3>
            <h3>http://35.72.50.16:9999/console/api-explorer</h3>
            <h3>https://flatlogic.com/projects/3491/edit</h3>
            <h3>https://www.mindomo.com/mindmap/c5d4e14ce3274c69bebbb5ee6be3ee93</h3>
            <h3>app center https://install.appcenter.ms/sign-in</h3>
            <h3>coplilot https://copilot.github.com/</h3>
            */}
            <Row>
                <Col lg={6}>
                    <Widget>
                        <Row className={"align-items-center"}>
                            <Col md={6}>
                                <img src={reactLogo} alt="react"/>
                            </Col>
                        </Row>
                    </Widget>
                </Col>
            </Row>
        </div>
    );
}

export default Dashboard;
