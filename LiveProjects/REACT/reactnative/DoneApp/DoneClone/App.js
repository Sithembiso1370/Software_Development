// ra => yarn react-native run-android

//  1. Add Task =>
//      when I click on Fab icon then input box will show up and
//     we can write task and Save using save button on keyboard

// 2. Task Complete =>
//     When User click on check box, he can deselect or select i.e. mark as complete or Incomplete

//3. Edit task =>
//    When user click on task he can edit that task

//4. Delete Task =>
//    when user click on close icon that task will get deleted

//5. User can Rearrange task by dragging task

import React, {useState} from 'react';
import {StyleSheet, Text, View, SafeAreaView, StatusBar} from 'react-native';
import Input from './src/Input';
import Header from './src/Header';
import TaskList from './src/TaskList';
import FAB from 'react-native-fab';
import Icon from 'react-native-vector-icons/MaterialIcons';
import colors from './assets/colors';

const dummyData = [
  {
    id: 1,
    task: 'Task 1',
    isComplete: false,
  },
  {
    id: 2,
    task: 'New Task 2',
    isComplete: false,
  },
  {
    id: 3,
    task: 'Here is my task 3',
    isComplete: false,
  },
  {
    id: 4,
    task: 'Welcome to react native',
    isComplete: true,
  },
];
const App = () => {
  const [taskList, setTaskList] = useState([]);

  const handleAddTask = () => {
    const new_task = {
      id: Math.floor(Math.random(10) * 1000),
      task: '',
      isComplete: false,
      focus: true,
    };
    setTaskList(prev => [...prev, new_task]);
  };

  const handleInput = (taskId, text) => {
    console.log(taskId, text);
    const temp_taskList = [...taskList];
    temp_taskList.map(item => {
      if (item.id === taskId) {
        item.task = text;
      }
    });
    console.log(temp_taskList);
    setTaskList(temp_taskList);
  };

  const handleComplete = taskId => {
    const temp_taskList = [...taskList];
    temp_taskList.map(item => {
      if (item.id === taskId) {
        item.isComplete = !item.isComplete;
      }
    });
    setTaskList(temp_taskList);
  };

  const handleDelete = taskId => {
    const filteredTasks = taskList.filter(item => item.id != taskId);
    setTaskList(filteredTasks);
  };

  console.log({taskList});

  return (
    <SafeAreaView style={{flex: 1, backgroundColor: 'white'}}>
      <StatusBar backgroundColor="white" barStyle="dark-content" />
      <Header />
      <TaskList
        data={taskList}
        setData={setTaskList}
        handleInput={handleInput}
        handleComplete={handleComplete}
        handleDelete={handleDelete}
      />
      <FAB
        buttonColor={colors.gray}
        iconTextColor="#FFFFFF"
        onClickAction={handleAddTask}
        visible={true}
        iconTextComponent={<Icon name="add" />}
      />
      {/* <Input /> */}
    </SafeAreaView>
  );
};

export default App;

const styles = StyleSheet.create({});
