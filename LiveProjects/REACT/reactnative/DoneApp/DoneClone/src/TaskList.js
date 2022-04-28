import React from 'react';
import {StyleSheet, Text, View, FlatList} from 'react-native';
import Empty from './Empty';
import Task from './Task';
const TaskList = ({data, handleInput, handleComplete, handleDelete}) => {
  return (
    <View>
      <FlatList
        ListEmptyComponent={<Empty />}
        keyExtractor={item => item.id + item.task + ''}
        data={data}
        renderItem={({item, index}) => (
          <Task
            key={item.id + ''}
            id={item.id}
            task={item.task}
            isComplete={item.isComplete}
            focus={item.focus}
            isLast={data.length - 1 == index}
            handleInput={handleInput}
            handleComplete={handleComplete}
            handleDelete={handleDelete}
          />
        )}
      />
    </View>
  );
};

export default TaskList;

const styles = StyleSheet.create({});
