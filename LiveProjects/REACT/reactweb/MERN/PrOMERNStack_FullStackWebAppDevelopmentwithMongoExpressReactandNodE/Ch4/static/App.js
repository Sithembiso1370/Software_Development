'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

// Grab the dom node to modify
var contentNode = document.getElementById('contents');

var IssueFilter = function (_React$Component) {
    _inherits(IssueFilter, _React$Component);

    function IssueFilter() {
        _classCallCheck(this, IssueFilter);

        return _possibleConstructorReturn(this, (IssueFilter.__proto__ || Object.getPrototypeOf(IssueFilter)).apply(this, arguments));
    }

    _createClass(IssueFilter, [{
        key: 'render',
        value: function render() {
            return React.createElement(
                'div',
                null,
                'This is a placeholder for the Issue Filter.'
            );
        }
    }]);

    return IssueFilter;
}(React.Component);

var BorderWrap = function (_React$Component2) {
    _inherits(BorderWrap, _React$Component2);

    function BorderWrap() {
        _classCallCheck(this, BorderWrap);

        return _possibleConstructorReturn(this, (BorderWrap.__proto__ || Object.getPrototypeOf(BorderWrap)).apply(this, arguments));
    }

    _createClass(BorderWrap, [{
        key: 'render',
        value: function render() {
            var borderedStyle = { border: "1px solid silver", padding: 6 };
            return React.createElement(
                'div',
                null,
                this.props.children
            );
        }
    }]);

    return BorderWrap;
}(React.Component);

var IssueRow = function IssueRow(props) {
    return React.createElement(
        'tr',
        null,
        React.createElement(
            'td',
            null,
            props.issue.id
        ),
        React.createElement(
            'td',
            null,
            props.issue.status
        ),
        React.createElement(
            'td',
            null,
            props.issue.owner
        ),
        React.createElement(
            'td',
            null,
            props.issue.created.toDateString()
        ),
        React.createElement(
            'td',
            null,
            props.issue.effort
        ),
        React.createElement(
            'td',
            null,
            props.issue.completionDate ? props.issue.completionDate.toDateString() : 'No deadline'
        ),
        React.createElement(
            'td',
            null,
            props.issue.title
        )
    );
};

function IssueTable(props) {
    var borderedStyle = { border: "1px solid silver", padding: 6 };
    var issueRows = props.issues.map(function (issue) {
        return React.createElement(IssueRow, { key: issue.id, issue: issue });
    });

    return React.createElement(
        'table',
        { className: 'bordered-table' },
        React.createElement(
            'thead',
            null,
            React.createElement(
                'tr',
                null,
                React.createElement(
                    'th',
                    null,
                    'Id'
                ),
                React.createElement(
                    'th',
                    null,
                    'Status'
                ),
                React.createElement(
                    'th',
                    null,
                    'Owner'
                ),
                React.createElement(
                    'th',
                    null,
                    'Created '
                ),
                React.createElement(
                    'th',
                    null,
                    'Effort'
                ),
                React.createElement(
                    'th',
                    null,
                    'Completetion date'
                ),
                React.createElement(
                    'th',
                    null,
                    'Title'
                )
            )
        ),
        React.createElement(
            'tbody',
            null,
            issueRows
        )
    );
}

// class IssueAdd extends React.Component {
//     render () {
//         return (<div>This is a placeholder for the Issue ADD Entry Form.</div>);
//     }
// }

// Create a JSX Class Component

var IssueList = function (_React$Component3) {
    _inherits(IssueList, _React$Component3);

    function IssueList() {
        _classCallCheck(this, IssueList);

        var _this3 = _possibleConstructorReturn(this, (IssueList.__proto__ || Object.getPrototypeOf(IssueList)).call(this));
        // Initializing App state


        _this3.state = { issues: [] };

        _this3.createIssue = _this3.createIssue.bind(_this3);
        return _this3;
    }

    // Called immediately after a component is mounted. Setting state here will trigger re-rendering


    _createClass(IssueList, [{
        key: 'componentDidMount',
        value: function componentDidMount() {}
    }, {
        key: 'loadData',
        value: function loadData() {
            var _this4 = this;

            setTimeout(
            // Note that we don’t have to bind loadData to this because we used an arrow function, which uses the lexical this
            function () {
                _this4.setState({ issues: issues });
            }, 5000);
        }
    }, {
        key: 'createIssue',
        value: function createIssue(newIssue) {
            var newIssues = this.state.issues.slice();
            newIssue.id = this.state.issues.length + 1;
            newIssues.push(newIssue);
            this.setState({ issues: newIssues });
        }
    }, {
        key: 'createTestIssue',
        value: function createTestIssue() {
            this.createIssue({
                status: 'New', owner: 'Sthe', created: new Date(),
                title: 'Dynamic test issue created'
            });
        }

        // The render() method is something that that the React framework calls when it 
        // needs to display the component

    }, {
        key: 'render',
        value: function render() {
            return React.createElement(
                'div',
                null,
                React.createElement(
                    'h1',
                    null,
                    'Issue Tracker'
                ),
                React.createElement(IssueFilter, null),
                React.createElement('hr', null),
                React.createElement(IssueTable, { issues: this.state.issues }),
                React.createElement('hr', null),
                React.createElement(IssueAdd, { createIssue: this.createIssue })
            );
        }
    }]);

    return IssueList;
}(React.Component);

var IssueAdd = function (_React$Component4) {
    _inherits(IssueAdd, _React$Component4);

    function IssueAdd() {
        _classCallCheck(this, IssueAdd);

        var _this5 = _possibleConstructorReturn(this, (IssueAdd.__proto__ || Object.getPrototypeOf(IssueAdd)).call(this));

        _this5.handleSubmit = _this5.handleSubmit.bind(_this5);
        return _this5;
    }

    _createClass(IssueAdd, [{
        key: 'handleSubmit',
        value: function handleSubmit(e) {
            e.preventDefault();
            var form = document.forms.issueAdd;
            this.props.createIssue({
                owner: form.owner.value,
                title: form.title.value,
                status: 'New',
                created: new Date()
            });
            // clear the form for the next input
            form.owner.value = "";form.title.value = "";
        }
    }, {
        key: 'render',
        value: function render() {
            return React.createElement(
                'div',
                null,
                React.createElement(
                    'form',
                    { name: 'issueAdd', onSubmit: this.handleSubmit },
                    React.createElement('input', { type: 'text', name: 'owner', placeholder: 'Owner' }),
                    React.createElement('input', { type: 'text', name: 'title', placeholder: 'Title' }),
                    React.createElement(
                        'button',
                        null,
                        'Add'
                    )
                )
            );
        }
    }]);

    return IssueAdd;
}(React.Component);

var issues = [{
    id: 1, status: 'Open', owner: 'Ravan',
    created: new Date('2016-08-15'), effort: 5, completionDate: undefined,
    title: 'Error in console when clicking Add'
}, {
    id: 2, status: 'Assigned', owner: 'Eddie',
    created: new Date('2016-08-16'), effort: 14,
    completionDate: new Date('2016-08-30'),
    title: 'Missing bottom border on panel'
}];

// 
ReactDOM.render(React.createElement(IssueList, null), contentNode);