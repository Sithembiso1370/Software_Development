package com.example.todolist

import android.view.View
import androidx.appcompat.view.menu.ActionMenuItemView
import androidx.recyclerview.widget.RecyclerView

data class TodoAdapter(
    private val todos : MutableList<Todo>
){

    class TodoViewHolder(itemView: View) : RecyclerView.ViewHolder(itemView)
}

