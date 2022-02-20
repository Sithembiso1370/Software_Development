# Import the Random Module
import random
# Import the pygame module
import pygame
# imprt os
import sys

# Initialise Pygame
pygame.init()

# Initialise and Decaire the pygame clock module into a variable
clock = pygame.time.Clock()

# The screen that will be created needs a width and a height.
screen_width = 1240
screen_height = 680

# Create/Initialise/Declaire a  Display with a Height and Width
screen = pygame.display.set_mode((screen_width,screen_height))


# This creates and loads the Game(image) Objects found in this folder (similarly with the enemy image).
player = pygame.image.load("image.png")
enemy = pygame.image.load("enemy.png")
enemy2 = pygame.image.load("enemy.png")
enemy3 = pygame.image.load("enemy.png")
prize = pygame.image.load("prize.jpg")


# Get the width and height of the images in order to do boundary detection (i.e. make sure the image stays within screen boundaries or know when the image is off the screen).
image_height = player.get_height()
image_width = player.get_width()
enemy_height = enemy.get_height()
enemy_width = enemy.get_width()

# The game objects coordinates
playerXPosition = 50
playerYPosition = 340

enemy1XPosition = 880 + random.randint(0,screen_width)
enemy2XPosition = 880 + random.randint(0,screen_width)
enemy3XPosition = 880 + random.randint(0,screen_height)
enemy1YPosition = random.randint(enemy_height-100,300)
enemy2YPosition = random.randint(300,500)
enemy3YPosition = random.randint(450,screen_height)

prizexposition = 880 + random.randint(0,screen_width*2)
prizeyposition = random.randint(100,screen_height-prize.get_height())


#  This Declaires and Stores the GameObjects speeds
# using limited random values to make objects positions appear random
randxn= 1
randy = random.randint(1,20)
# Enemy Speed
enemy1_speed = random.randint(randxn,5)
enemy2_speed = random.randint(randxn,3)
enemy3_speed = random.randint(randxn,4)
# prize speed
prize_speed = random.randint(randxn,4)

# Function to return values on any Overlaps and Collisions
collision_status = []
def handlescreenoverlapsandcollisions():
    global collision_status,enemy1XPosition,enemy2XPosition,enemy3XPosition,prizexposition,prizeyposition
    # move enemies left DIFFERENT SPEEDS
    # Clear the collision status array whenever the function starts
    collision_status.clear()
    # Handle Objects  overlaps  screen for enemies and the prize
    if (enemy1XPosition + screen_width) < screen_width:
        # move enemies to slide in positions
        enemy1XPosition = screen_width + random.randint(0,200)
        collision_status.append(f"Overlap1: enemy1 {enemy1XPosition}")
    elif (enemy2XPosition + screen_width) < screen_width:
        # move enemies to slide in positions
        enemy2XPosition = screen_width + random.randint(0,400)
        collision_status.append("Overlap2")
    elif (enemy3XPosition + screen_width) < screen_width:
        # move enemies to slide in positions
        enemy3XPosition = screen_width + random.randint(0,70)
        collision_status.append("Overlap3")
    elif (prizexposition + screen_width) < screen_width:
        # move prizes to slide in positions
        prizexposition = screen_width + random.randint(0,screen_width)
        prizeyposition = prizeyposition + random.randint(0,prizeyposition)
        collision_status.append("Overlap4")
    # IF no Overlaps check for Collisions
    else:
        # Check for collisions
        if playerXPosition + image_width > enemy1XPosition and enemy1XPosition > playerXPosition:
            # Check check shared y values
            for y in range(playerYPosition,playerYPosition+image_height):
                if y in range(enemy1YPosition,enemy1YPosition+enemy_height):
                    collision_status.append("Colliding:enemy1")
        elif playerXPosition + image_width > enemy2XPosition and enemy2XPosition > playerXPosition:
            # print("enemy2 on same x-axis cross")
            for y in range(playerYPosition, playerYPosition + image_height):
                if y in range(enemy2YPosition, enemy2YPosition + enemy_height):
                    # print('enemy2 on same y-axis cross')
                    # print("Colliding with : enemy2")
                    collision_status.append("Colliding:enemy2")
        elif playerXPosition + image_width > enemy3XPosition and enemy3XPosition > playerXPosition:
            # print("enemy3 on same x-axis cross")
            for y in range(playerYPosition, playerYPosition + image_height):
                if y in range(enemy3YPosition, enemy3YPosition + enemy_height):
                    # print('enemy3 on same y-axis cross')
                    # print("Colliding with : enemy3")
                    collision_status.append("Colliding:enemy3")
    #     prize collision test
        elif playerXPosition + image_width > prizexposition and prizexposition > playerXPosition:
            # print("enemy3 on same x-axis cross")
            for y in range(playerYPosition, playerYPosition + image_height):
                if y in range(prizeyposition, prizeyposition + enemy_height):
                    # print('enemy3 on same y-axis cross')
                    # print("Colliding with : prize")
                    collision_status.append("Colliding:prize")

    return collision_status


def moveenemiesleft():
    # move enemies left DIFFERENT SPEEDS
    global enemy1XPosition, enemy2XPosition, enemy3XPosition
    enemy1XPosition -= enemy1_speed
    enemy2XPosition -= enemy2_speed
    enemy3XPosition -= enemy3_speed

def movenemiesverticaly():
    global enemy3YPosition
    rand_movement = random.randint(0,4)
    if rand_movement == 1:
        enemy3YPosition += 1
    else:
        enemy3YPosition = enemy3YPosition

def moveprizeleft():
    # move prize
    global prizexposition
    prizexposition -= 3

def movenprizeverticaly():
    global prizeyposition
    rand_movement = random.randint(0,4)
    if rand_movement == 1:
        prizeyposition += 1
    else:
        prizeyposition = prizeyposition

def rendergameobjects():
    screen.fill(0)
    # display all Objects
    screen.blit(player, (playerXPosition, playerYPosition))
    # screen.blit(prize, (playerXPosition, playerYPosition))
    # Display the enemies
    screen.blit(enemy, (enemy1XPosition, enemy1YPosition))
    screen.blit(enemy2, (enemy2XPosition, enemy2YPosition))
    screen.blit(enemy3, (enemy3XPosition, enemy3YPosition))
    # display the prize
    screen.blit(prize, (prizexposition, prizeyposition))

def moveplayer():
    global playerXPosition,playerYPosition,enemy1XPosition,enemy2XPosition,enemy3XPosition

    if pygame.key.name(event.key).lower() == 'a':
        # move left
        playerXPosition -= 20
    elif pygame.key.name(event.key).lower() == 's':
        # move player right
        playerXPosition += 20
    elif pygame.key.name(event.key).lower() == 'z':
        # move down
        playerYPosition += 20
    elif pygame.key.name(event.key).lower() == 'w':
        # move up
        playerYPosition -= 20
    else:
        playerXPosition = playerXPosition
        playerYPosition = playerYPosition

def drawplayer():
    screen.blit(player, (playerXPosition, playerYPosition))

points = 0

while 1:
    # Render all ojects on the display
    rendergameobjects()
    moveenemiesleft()
    moveprizeleft()
    # confirm screen overlaps and collisions before moving again
    # print(handlescreenoverlapsandcollisions())
    # handle collissions
    for x in handlescreenoverlapsandcollisions():
        if x == "Colliding:enemy1":
            print("Collided:enemy1 you loose")
            screen.fill(0)
            pygame.quit()
        elif x == "Colliding:enemy2":
            print("Colliding:2 you loose")
            screen.fill(0)
            pygame.quit()
            exit(0)
        elif x == "Colliding:enemy3":
            print("Colliding:3 you loose")
            screen.fill(0)
            pygame.quit()
        elif x == "Colliding:prize":
            points += 1
            print(f"1 POINT ADDED : prize taken")
            screen.fill(0)
            pygame.quit()
        else:
            # if no collisions detected
            moveenemiesleft()
            moveprizeleft()

    # Handle any events
    for event in pygame.event.get():
        # Check for collisions
        if event.type == pygame.QUIT:
            pygame.quit()
            exit(0)
        elif event.type == pygame.KEYUP:
            moveplayer()

    clock.tick(10)
    # now update the display
    pygame.display.update()
    pygame.display.flip()

# Create your own game based on the code in example.py (you do not have
# to write your game from scratch). Your game should include:
# ○ One ‘player’ object. You should be able to move the player around
# the screen by using the up, down, left and right arrows.
# ○ At least 3 ‘enemy’ objects. The enemies should all move across the
# screen from different positions. If the player object collides with any
# enemy object, they lose, and the game ends.
# ○ At least 1 ‘prize’ object. If the player object collides with the prize
# object, they win, and the game ends.
# ● Feel free to use the images in this folder or your own images. Remember
# to respect copyright laws if you choose to use images from the web.