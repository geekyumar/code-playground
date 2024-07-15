import pyautogui
import time
from Quartz import CGEventCreateKeyboardEvent, kCGEventKeyDown, kCGEventKeyUp, kCGEventPost, kCGAnnotatedSessionEventTap

# Function to switch to the next window
def switch_window():
    # Create a command + tab key press event
    cmd_down = CGEventCreateKeyboardEvent(None, 0x37, True)  # 0x37 is the virtual key code for the command key
    tab_down = CGEventCreateKeyboardEvent(None, 0x30, True)  # 0x30 is the virtual key code for the tab key
    tab_up = CGEventCreateKeyboardEvent(None, 0x30, False)
    cmd_up = CGEventCreateKeyboardEvent(None, 0x37, False)

    # Post the events to the system
    kCGEventPost(kCGAnnotatedSessionEventTap, cmd_down)
    kCGEventPost(kCGAnnotatedSessionEventTap, tab_down)
    kCGEventPost(kCGAnnotatedSessionEventTap, tab_up)
    kCGEventPost(kCGAnnotatedSessionEventTap, cmd_up)

# Function to move the cursor to a new position
def move_cursor():
    try:
        # Get the current screen resolution
        screen_width, screen_height = pyautogui.size()
        
        # Move the cursor to the center of the screen
        new_x = screen_width // 2
        new_y = screen_height // 2
        pyautogui.moveTo(new_x, new_y, duration=0.5)
    except Exception as e:
        print(f"Error moving the cursor: {e}")

# Main loop to switch between applications and move the cursor
while True:
    try:
        switch_window()
        move_cursor()
        time.sleep(30)
    except KeyboardInterrupt:
        print("Script terminated by user.")
        break
    except Exception as e:
        print(f"Error in main loop: {e}")
        time.sleep(30)  # Wait a bit before retrying

